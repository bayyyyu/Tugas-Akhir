<x-app>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Pengajuan Peran</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">MangroVista</a></li>
                            <li class="breadcrumb-item active">Pengajuan Peran</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <th width="10px">No</th>
                            <th width="150px">Aksi</th>
                            <th>Nama Pemohon</th>
                            <th>Tanggal Pengajuan</th>
                            <th>status</th>
                        </thead>
                        <tbody>
                            @foreach ($list_role_request as $role_request)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ url('Admin/Pengajuan-Peran', $role_request->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa fa-info"></i>
                                        </a>
                                        <x-button.delete id="{{ $role_request->id }}" />
                                    </td>
                                    <td>{{ $role_request->nama_lengkap }}</td>
                                    <td>{{ $role_request->created_at->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
                                        Pukul: {{ $role_request->created_at->isoFormat('HH:mm') }}</td>
                                    <td width="20px">
                                        @php
                                            $status = $role_request->status_request;
                                            $background_color = '';

                                            switch ($status) {
                                                case 'Menunggu Konfirmasi':
                                                    $background_color = '#4E9ED4';
                                                    break;
                                                case 'Diterima':
                                                    $background_color = '#06A44B';
                                                    break;
                                                case 'Ditolak':
                                                    $background_color = '#f5325c';
                                                    break;
                                                default:
                                                    $background_color = 'transparent';
                                                    break;
                                            }
                                        @endphp

                                        <div
                                            style="background-color: {{ $background_color }}; padding: 5px; border-radius: 5px;">
                                            <span style="color: white;">{{ $status }}</span>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</x-app>
