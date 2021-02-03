@extends('layouts.dashboard')

@section('content')
<div class="card bg-default shadow">
    <div class="card-header bg-transparent border-0">
        <h3 class="text-white mb-0">Articles</h3>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Title</th>
                    <th scope="col" class="sort" data-sort="budget">Date</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col">User</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="list">
                <?php foreach($articles as $article): ?>
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="{{ asset('/') }}assets/img/theme/bootstrap.jpg">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm"><?=$article->title?></span>
                            </div>
                        </div>
                    </th>
                    <td class="budget">
                        <?=substr($article->created_at,0,10)?>
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                            <i class="bg-success"></i>
                            <span class="status">Public</span>
                        </span>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="<?=($article->id == 1)?'Juan Jimenez':'Noe Gomez'?>">
                                <img alt="Image placeholder" src="{{ asset('/') }}assets/img/theme/<?=($article->id == 1)?'juanj.png':'noeg.jpg'?>">
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="completion mr-2">100%</span>
                            <div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
@endsection