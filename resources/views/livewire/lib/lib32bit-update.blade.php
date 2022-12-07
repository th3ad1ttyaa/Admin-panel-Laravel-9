<div>
    <div class="container-fluid py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Push 32bit lib update
                        <a href="{{ url('admin/push-lib32-update/1/push-lib') }}" class="btn btn-dark btn-sm float-end">Push new update</a>
                    </h4>
                </div>
                <div>
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name-V7</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name-V8</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Version-V7</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Version-V8</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dir-V7</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dir-V8</th>
                                </tr>
                            </thead>
                            @forelse ($lib32DB as $dbLib)
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV7aName }}</p>
                                        </td>

                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV8aName }}</p>
                                        </td>

                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV7aVersion }}</p>
                                        </td>

                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV8aVersion }}</p>
                                        </td>

                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV7aUrl }}</p>
                                        </td>

                                        <td class="align-middle">
                                            <p class="text-xs font-weight-bold mb-0">{{ $dbLib->libARMV8aUrl }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                            <tr>
                              <td colspan="10" align="center">
                                  <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
