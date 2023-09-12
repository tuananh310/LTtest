@extends('master')
@section('content')
    <div class="row w-100">
        @foreach ($records as $record)
            <div class="tb-detail col-md-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th colspan="4" class="bg-primary-subtle">
                                <div class="d-flex justify-content-around">
                                    <span>A</span>
                                    <span>0</span>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2">CÔNG THỨC 1</th>
                            <th colspan="2">{{$record['staff']->ct1}}</th>
                        </tr>
                        <tr>
                            <th colspan="2">CÔNG THỨC 2</th>
                            <th colspan="2">{{$record['staff']->ct2}}</th>
                        </tr>
                        <tr>
                            <th colspan="2">CÔNG THỨC 3</th>
                            <th colspan="2">{{$record['staff']->ct3}}</th>
                        </tr>
                        <tr>
                            <td class="bg-dark-subtle text-bold fw-bold">THỜI GIAN</td>
                            <td class="bg-dark-subtle text-bold fw-bold">TH1</td>
                            <td class="bg-dark-subtle text-bold fw-bold">CHỈNH LÝ</td>
                            <td class="bg-dark-subtle text-bold fw-bold">V+/V-</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">07:30-8:30</td>
                            <td>{{$record['time'][0]->th1}}</td>
                            <td>{{$record['time'][0]->readjust}}</td>
                            <td>{{$record['time'][0]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">08:30-9:30</td>
                            <td>{{$record['time'][1]->th1}}</td>
                            <td>{{$record['time'][1]->readjust}}</td>
                            <td>{{$record['time'][1]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">09:30-10:30</td>
                            <td>{{$record['time'][2]->th1}}</td>
                            <td>{{$record['time'][2]->readjust}}</td>
                            <td>{{$record['time'][2]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">10:30-11:30</td>
                            <td>{{$record['time'][3]->th1}}</td>
                            <td>{{$record['time'][3]->readjust}}</td>
                            <td>{{$record['time'][3]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">13:00-14:00</td>
                            <td>{{$record['time'][4]->th1}}</td>
                            <td>{{$record['time'][4]->readjust}}</td>
                            <td>{{$record['time'][4]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">14:00-15:00</td>
                            <td>{{$record['time'][5]->th1}}</td>
                            <td>{{$record['time'][5]->readjust}}</td>
                            <td>{{$record['time'][5]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">15:00-16:00</td>
                            <td>{{$record['time'][6]->th1}}</td>
                            <td>{{$record['time'][6]->readjust}}</td>
                            <td>{{$record['time'][6]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">16:00-17:00</td>
                            <td>{{$record['time'][7]->th1}}</td>
                            <td>{{$record['time'][7]->readjust}}</td>
                            <td>{{$record['time'][7]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">17:00-18:00</td>
                            <td>{{$record['time'][8]->th1}}</td>
                            <td>{{$record['time'][8]->readjust}}</td>
                            <td>{{$record['time'][8]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">18:00-19:00</td>
                            <td>{{$record['time'][9]->th1}}</td>
                            <td>{{$record['time'][9]->readjust}}</td>
                            <td>{{$record['time'][9]->other}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">19:00-20:00</td>
                            <td>{{$record['time'][10]->th1}}</td>
                            <td>{{$record['time'][10]->readjust}}</td>
                            <td>{{$record['time'][10]->other}}</td>
                        </tr>
                        <tr>
                            <td class="bg-success-subtle fw-bold">TỔNG</td>
                            <td class="bg-success-subtle fw-bold">{{$record['total_th1']}}</td>
                            <td class="bg-success-subtle fw-bold">{{$record['total_readjust']}}</td>
                            <td class="bg-success-subtle fw-bold">{{$record['total_other']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
