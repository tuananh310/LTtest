@extends('master')
@section('content')
    <div class="bg-dark-subtle">
        <div class="py-2 ms-2">
            <a href="#" class="text-dark text-decoration-none">TRANG CHỦ</a>
        </div>
    </div>
    <div class="px-2 py-2 d-flex justify-content-between">
        {{-- <form method="GET" action="{{ route('test.index') }}" class="d-flex align-items-center"> --}}
        <div>
            <span class="">Date</span>
            <input type="date" value="2023-09-12" name="date" class="mx-2">
            <button type="submit" class="btn btn-primary">Lọc</button>
        </div>
        <div>
            <a href="{{route('test.detail', ['date' => '2023-09-12'])}}" class="btn btn-primary">Chi tiết</a>
        </div>
        {{-- </form> --}}
    </div>
    <div class="mx-1 my-1">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">MÃ</th>
                    <th scope="col">CỘT</th>
                    <th scope="col">CÔNG THỨC 1</th>
                    <th scope="col">CÔNG THỨC 2</th>
                    <th scope="col">CÔNG THỨC 3</th>
                    <th scope="col" class="text-danger">NHẬP 1</th>
                    <th scope="col" class="text-danger">NHẬP 2</th>
                    <th scope="col" class="text-danger">NHẬP 3</th>
                    <th scope="col">CÔNG THỨC 5</th>
                    <th scope="col">CÔNG THỨC 6</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td class="checkbox-round"><input type="checkbox" data-id="{{ $record->id }}" class="check"></td>
                        <td>{{ $record->code }}</td>
                        <td>{{ $record->col }}</td>
                        <td class="ct1{{ $record->id }}">{{ $record->ct1 }}</td>
                        <td class="ct2{{ $record->id }}">{{ $record->ct2 }}</td>
                        <td class="ct3{{ $record->id }}">{{ $record->ct3 }}</td>
                        <td><input type="text" value="{{ $record->nhap1 }}" data-id="" data-name="nhap1"
                                class="ct border-0"></td>
                        <td><input type="text" value="{{ $record->nhap2 }}" data-id="" data-name="nhap2"
                                class="ct border-0"></td>
                        <td><input type="text" value="{{ $record->nhap3 }}" data-id="" data-name="nhap3"
                                class="ct border-0"></td>
                        <td class="ct4{{ $record->id }}">{{ $record->ct4 }}</td>
                        <td class="ct5{{ $record->id }}">{{ $record->ct5 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mx-1 my-1 tb-detail d-none">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">THỜI GIAN</th>
                    <th scope="col">TH1</th>
                    <th scope="col">CHỈNH LÝ</th>
                    <th scope="col">V+/V-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>07:30-8:30</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th1 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust1 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other" class="dt other1 border-0">
                    </td>
                </tr>
                <tr>
                    <td>08:30-9:30</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th2 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust2 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other" class="dt other2 border-0">
                    </td>
                </tr>
                <tr>
                    <td>09:30-10:30</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th3 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust3 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other3 border-0">
                    </td>
                </tr>
                <tr>
                    <td>10:30-11:30</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th4 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust4 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other4 border-0"></td>
                </tr>
                <tr>
                    <td>13:00-14:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th5 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust5 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other5 border-0"></td>
                </tr>
                <tr>
                    <td>14:00-15:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th6 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust6 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other6 border-0"></td>
                </tr>
                <tr>
                    <td>15:00-16:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th7 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust7 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other7 border-0"></td>
                </tr>
                <tr>
                    <td>16:00-17:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th8 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust8 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other8 border-0"></td>
                </tr>
                <tr>
                    <td>17:00-18:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th9 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust9 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other9 border-0"></td>
                </tr>
                <tr>
                    <td>18:00-19:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th10 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust10 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other10 border-0"></td>
                </tr>
                <tr>
                    <td>19:00-20:00</td>
                    <td><input type="text" value="0" data-id="" data-name="th1" class="dt th11 border-0">
                    </td>
                    <td><input type="text" value="0" data-id="" data-name="readjust"
                            class="dt readjust11 border-0"></td>
                    <td><input type="text" value="0" data-id="" data-name="other"
                            class="dt other11 border-0"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.ct').on('keyup', function() {
            if ($(this).val() != "") {
                var id = $(this).data('id')
                var name = $(this).data('name')
                var value = $(this).val()
                $.ajax({
                    type: 'POST',
                    url: "{{ route('test.update') }}",
                    data: {
                        name: name,
                        id: id,
                        value: value,
                    },
                    success: function(data) {
                        $('.ct1' + data.data.id).html(data.data.ct1)
                        $('.ct2' + data.data.id).html(data.data.ct2)
                        $('.ct3' + data.data.id).html(data.data.ct3)
                        $('.ct4' + data.data.id).html(data.data.ct4)
                        $('.ct5' + data.data.id).html(data.data.ct5)
                    }
                });
            }
        })

        $(".check").on('click', function() {
            if (this.checked) {
                $('.check').prop('checked', false);
                $(this).prop('checked', true);
                let staff_id = $(this).data('id')
                $.ajax({
                    type: 'GET',
                    url: "{{ route('test.getStaff') }}",
                    data: {
                        staff_id: staff_id,
                    },
                    success: function(data) {
                        for (let i = 1; i <= 11; i++) {
                            let record = data.data.find(x => x.time_slot == i)
                            $('.th' + i).val(record.th1)
                            $('.th' + i).data('id', record.id)
                            $('.readjust' + i).val(record.readjust)
                            $('.readjust' + i).data('id', record.id)
                            $('.other' + i).val(record.other)
                            $('.other' + i).data('id', record.id)
                        }
                        $('.tb-detail').removeClass('d-none')
                    }
                });
            } else {
                $('.tb-detail').addClass('d-none')
            }
        });

        $('.dt').on('keyup', function() {
            if ($(this).val() != "") {
                var id = $(this).data('id')
                var name = $(this).data('name')
                var value = $(this).val()
                $.ajax({
                    type: 'POST',
                    url: "{{ route('test.updateTime') }}",
                    data: {
                        name: name,
                        id: id,
                        value: value,
                    },
                    success: function(data) {}
                });
            }
        })
    </script>
@endsection
