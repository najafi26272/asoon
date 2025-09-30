<div class="card">
    <h5 class="card-header"> لیست قسمت ها</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>عنوان</th>
                <th>سرویس</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($items as $item)
                <tr>
                    <td>
                        {{$item->id}}
                    </td>

                    <td>
                        {{$item->title}}
                    </td>
                    <td>
                        {{$item->service->title}}
                    </td>

                    <td>
                        <a wire:click="update({{$item->id}})" class="cursor-pointer"><i title="ویرایش" class="bx bx-edit-alt text-info me-1"></i> </a>
                        <a wire:click="delete({{$item->id}})" class="cursor-pointer" ><i title="حذف" class="bx text-danger bx-trash me-1"></i> </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
            {{$items->links('pagination::bootstrap-4')}}
        </div>

    </div>
</div>
