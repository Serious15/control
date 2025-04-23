@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">

</div>

<div class="attendance__content">
    <div class="attendance__panel">
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">目標体重設定</button>
        </form>
        <form class="attendance__button">
            <button class="attendance__button-submit" type="submit">ログアウト</button>
        </form>
    </div>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">日付</th>
                <th class="attendance-table__header">体重</th>
                <th class="attendance-table__header">食事摂取カロリー</th>
                <th class="attendance-table__header">運動時間</th>
            </tr>
        </table>
    </div>
</div>
@endsection