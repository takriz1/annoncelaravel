<div class="page-content">
    <div class="inner-box">
        <div class="dashboard-box">
            <h2 class="dashbord-title">My Ads</h2>
        </div>
        <div class="dashboard-wrapper">
            <nav class="nav-table">
                <ul>
                    <li class="active"><a href="#">All Ads ({{ $products->count() }})</a></li>
                    <li><a href="#">Published ({{ $products->where('state', '=', 'Accepted')->count() }})</a></li>

                </ul>
            </nav>
            <table class="table table-responsive dashboardtable tablemyads">
                <thead>
                    <tr>

                        <th>Photo</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Ad Status</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $p)
                        <tr data-category="active">

                            <td class="photo">

                                <img class="img-fluid" src="{{ asset('uploads/products/') }}/{{ $p->image }}"
                                    alt="">

                            </td>
                            <td data-title="Title">
                                <h3>{{ $p->name }}</h3>
                            </td>
                            <td data-title="Category">
                                <span class="adcategories">{{ $p->category->libelle_c }}</span>
                            </td>
                            <td data-title="Ad Status">

                                @switch($p->state)
                                    @case('Accepted')
                                        <span class="adstatus adstatusactive">{{ $p->state }}</span>
                                    @break

                                    @case('InProgress')
                                        <span class="adstatus adstatussold">{{ $p->state }}</span>
                                    @break

                                    @default
                                        <span class="adstatus adstatusinactive">{{ $p->state }}</span>
                                @endswitch

                            </td>
                            <td data-title="Price">
                                <h3>{{ $p->price }} TND</h3>
                            </td>
                            <td data-title="Quantity">
                                <h3>{{ $p->qtt }}</h3>
                            </td>
                            <td data-title="Action">
                                <div class="btns-actions">

                                    <a class="btn-action btn-view" href="/user/post/{{ $p->id }}/details"><i
                                            class="lni-eye"></i></a>


                                    @switch($p->state)
                                        @case('InProgress')
                                            <a href="javascript:void(0)" id="edit-post" data-id="{{ $p->id }}"
                                                type="button" class="btn-action btn-edit"> <i class="lni-pencil"></i></a>
                                        @break

                                        @case('Rejected')
                                            <a href="javascript:void(0)" id="edit-post" data-id="{{ $p->id }}"
                                                type="button" class="btn-action btn-edit"> <i class="lni-pencil"></i></a>
                                            <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                                        @break

                                        @default
                                    @endswitch






                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
