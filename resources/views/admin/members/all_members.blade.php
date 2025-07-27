
<tbody style="">
@if(isset($members) &&  count($members) > 1)

<!--    --><?php //$n=1; ?>
    @foreach($members as $member)
        <tr role="row" class="">
            {{--<th tabindex="0">--}}
            {{--<label>--}}
            {{--<input class="selectpin" data-id="{{$member->username}}" type="checkbox">--}}
            {{--<span></span>--}}
            {{--</label>--}}
            {{--</th>--}}
            <td>{{$member->id}}</td>
            <td>{{$member->firstname. ' '. $member->lastname}}</td>

            <td>{{$member->username}}</td>
{{--            <td>{{$member->membership_id}}</td>--}}
            <td>{{$member->username == 'GodsWealth1' ? 'Achiever':$member->package->name}}</td>
            {{--                                                                <td>{{$member->rewards[0]->left_pvs + $member->rewards[0]->right_pvs + $member->rewards[0]->points}}</td>--}}

        </tr>
    @endforeach
@endif
