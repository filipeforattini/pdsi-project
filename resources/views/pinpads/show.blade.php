@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <canvas id="myChart" width="1300" height="400"></canvas>
        </div>
    </div>

    <table role="table" class="table">
        <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Easymoney Fee ({{ $pinpad->fee_easymoney }},00 %)</th>
            <th>Aquire Fee</th>
            <th>Earnings</th>
        </tr>
        @foreach($pinpad->transactions as $transaction)
            <tr>
                <td>{{ $transaction->card->customer->getName() }}</td>
                <td>{{ ($transaction->amount)/100 }}</td>
                <td>{{ ($transaction->fee_easymoney)/100 }}</td>
                <td>{{ ($transaction->fee_aquire)/100 }}</td>
                <td>{{ ($transaction->earnings())/100 }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')
    var ctx = document.getElementById("myChart").getContext("2d");

    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [
                    <?php $repository = new \App\TransactionRepository($pinpad->transactions); ?>
                    @foreach($repository->perMonth() as $n)
                        {{ $n/100 }},
                    @endforeach
                    0
                ]
            }
        ]
    };

    var myLineChart = new Chart(ctx).Line(data, {});
@endsection