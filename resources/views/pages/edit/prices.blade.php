@extends('admin')
@section('content')
<h1>Цены</h1>


<table style="margin-right: 0px;">
            <tr>
                <th width="300">Категория комнаты</th>
                <th width="100">Стоимость до 30 дней</th>
                <th width="100">Стоимость свыше 30 дней</th>
                <th width="100"></th>
            </tr>
        
        @foreach($data as $data)
        {!! Form::open(['url' => 'prices/store/' . $data->id]) !!}
            <tr>
                <td>
                    <input type="text" name="room" style="width: 200px;margin: 0;" value="{{$data->room}}">
                </td>
                <td><input type="text" name="price_to_30" style="width: 80px;margin: 0;" value="{{$data->price_to_30}}"> руб</td>
                <td><input type="text" name="price_up_30" style="width: 80px;margin: 0;" value="{{$data->price_up_30}}"> руб</td>
                <td><input type="submit" class="button" style="width: 100px;" value="Сохранить"></td>
            </tr>
        {!! Form::close() !!}
        @endforeach
        
</table>


@stop
