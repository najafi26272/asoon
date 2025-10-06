<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>کدخبر</th>
                <th>عنوان</th>
                <th>توسط</th>
                <th>سرویس</th>
                <th>تاریخ ثبت</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @if(count($items) != 0)
                @foreach($items as $item)
                    <tr>
                        <td>
                            {{$item->news_code}}
                        </td>

                        <td>
                            <div title="{{$item->title}}" style="width: 300px;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        ">
                                {{$item->title}}
                            </div>

                        </td>
                        <td >
                            {{$item->username}}
                        </td>
                        <td style="font-size: 12px">
                            {{$item->service_title}}
                        </td>
                        <td style="font-size: 12px">
                            {{verta($item->created_at)->format('Y/m/d H:i')}}
                        </td>
                        <td style="font-size: 12px">
                            {{$item->status_title}}
                        </td>
                        <td>

                            @if($item->editable_status)
                                <a href="edit/{{$item->id}}"><i title="ویرایش"
                                                                class="bx bx-edit-alt text-info me-1"></i> </a>
                            @endif
                            @if($deleteAccess)
                                <a wire:click="delete({{$item->id}})" class="cursor-pointer"><i title="حذف"
                                                                                                class="bx text-danger bx-trash me-1"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        موردی یافت نشد.
                    </td>
                </tr>

            @endif


            </tbody>
        </table>
        <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
            {{$items->links('pagination::bootstrap-4')}}
        </div>

    </div>
</div>
