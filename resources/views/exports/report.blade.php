<table>
        <thead>
        <tr>
            <th> 
                تاریخ                    
            </th>
            <th>
                روز
            </th>
            <th>
                ساعت
            </th>
            <th>
                شرح فعالیت
            </th>         
        </tr>
        </thead>
        <tbody>
        @foreach($groupedItems as $date => $groupedItem)
                    <tr>
                        <td>
                            {{ Verta::instance($date)->format('Y-m-d') }}
                        </td>
                        <td>
                            {{ Verta::instance($date)->formatWord('l')}}
                        </td>
                        <td>
                            {{ intdiv($groupedItem->sum('time'), 60).':'. ($groupedItem->sum('time') % 60) }}
                        </td>
                        @php $tasks=''; @endphp
                        @foreach($groupedItem as $item)
                            @php $tasks .= $item->task .' _ ' @endphp                        
                        @endforeach
                        <td>{{ substr($tasks, 0, -2)}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
 