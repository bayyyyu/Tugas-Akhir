<x-app>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Penanaman</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">MangroVista</a></li>
                            <li class="breadcrumb-item active">Penanaman</li>
                        </ol>
                    </div><!--end col-->
                    <div class="col-auto align-self-center tab">
                        <a href="{{ url('Admin/Event/create') }}" class="btn btn-sm btn-outline-primary">
                            <i data-feather="plus" class="align-self-center icon-xs"></i>
                            Tambah Penanaman
                        </a>
                    </div>
                    <!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <th width="10px">No</th>
                            <th width="150px">Aksi</th>
                            <th>Sample</th>
                            <th>Lokasi</th>
                            <th width="10">Status Penanaman</th>
                            <th>Foto</th>
                        </thead>
                        <tbody>

                            @foreach ($list_tanaman as $tanaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('Admin/Tanaman', $tanaman->id) }}"
                                                class="btn btn-dark btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('Admin/Tanaman', $tanaman->id) }}/edit"
                                                class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            <x-button.delete id="{{ $tanaman->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $tanaman->sample }}</td>
                                    <td>{{ $tanaman->lokasi }}</td>
                                    <td>
                                        <span data-url="{{ url('Admin/Tanaman', $tanaman->id) }}"
                                            id="statusPenanaman_{{ $tanaman->id }}"
                                            data-original-value="{{ $tanaman->status_penanaman }}">{{ $tanaman->status_penanaman }}</span>
                                        <a onclick="editStatusPenanaman({{ $tanaman->id }})"><i
                                                class="fa fa-edit" style="float: right; margin-top:8px"></i></a>
                                    </td>
                                    <td><a href="{{ url('Admin/Tanaman', $tanaman->id) }}"><img
                                                src="{{ asset($tanaman->foto) }}" alt=""
                                                style="width:100%; height:80px; object-fit:cover"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function editStatusPenanaman(tanamanId) {
            var spanStatusPenanaman = document.getElementById('statusPenanaman_' + tanamanId);
            var currentStatusPenanaman = spanStatusPenanaman.textContent;
            var actionUrl = spanStatusPenanaman.dataset.url;

            var formHTML = `
            <form action="${actionUrl}" method="post">
                @csrf
                @method('PUT')
                <select name="status_penanaman" onchange="showButton(this)" data-tanaman-id="${currentStatusPenanaman}" data-original-value="${currentStatusPenanaman}">
                    <option value="baru ditanam" ${currentStatusPenanaman === 'baru ditanam' ? 'selected' : ''}>Baru Ditanam</option>
                    <option value="hidup" ${currentStatusPenanaman === 'hidup' ? 'selected' : ''}>Hidup</option>
                    <option value="mati" ${currentStatusPenanaman === 'mati' ? 'selected' : ''}>Mati</option>
                </select>
                <br>
                <div class="button-group pull-right">
                    <a href="#" class="btn btn-sm btn-mat" onclick="cancelEditStatusPenanaman(event, ${tanamanId})" style="display: inline-block; margin-top: 10px; border-radius: 5px; border: 1px solid rgb(185, 0, 0); padding: 5px 10px;">Batal</a>
                    <button class="btn btn-sm" type="submit" style="display: inline-block; margin-top: 10px; border-radius: 5px; border: 1px solid rgb(0, 172, 66); padding: 5px 10px;"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
            `;

            spanStatusPenanaman.innerHTML = formHTML;
        }

        function cancelEditStatusPenanaman(event, tanamanId) {
            event.preventDefault();

            var spanStatusPenanaman = document.getElementById('statusPenanaman_' + tanamanId);
            var originalValue = spanStatusPenanaman.dataset.originalValue;

            spanStatusPenanaman.textContent = originalValue;

            var editLink = document.createElement('a');
            editLink.onclick = function() {
                editStatusPenanaman(tanamanId);
            };
            editLink.innerHTML = '<i class="fa fa-edit" style="float: right; margin-top:8px"></i>';

            // Hapus tombol Simpan dan Batal
            var btnSave = spanStatusPenanaman.nextSibling;
            var btnCancel = btnSave.nextSibling;
            btnSave.parentNode.removeChild(btnSave);
            btnCancel.parentNode.removeChild(btnCancel);

            // Tambahkan tombol Edit kembali
            spanStatusPenanaman.parentNode.appendChild(editLink);
        }
    </script>
</x-app>
