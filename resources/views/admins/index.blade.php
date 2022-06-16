@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h3 class="text-center mb-4">Dashboard</h3>
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('Product Favorites') }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area d-flex justify-content-center">
                            <canvas id="myChart" style="height: 300px; width:80%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let datasets=[];
        let labels=[];

        function updateChart(){
            $.ajax({
                type: "GET",
                url: "{{ route('get-products') }}",
                success: function (data) {
                    dataChart = JSON.parse(data);
                    dataChart.map((val) => {
                        datasets.push(val.total);
                        labels.push(val.products.name);
                    });
                    myChart.update();
                },
            });
        }

        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Favorite Products',
                    data: datasets,
                    backgroundColor: "lightblue",
                    borderColor: "#8b9863",
                    color: "white",
                }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: false,
                plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                }
                }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        updateChart();

        // $(document).ready(function(e){
        //     $.ajax({
        //         type:"GET",
        //         url:"{{ route('get-products') }}",
        //         success:function(data){
        //             // console.log(data);
        //             const datas = JSON.parse(data);
        //             // console.log(datas);
        //             datas.map((val) => {
        //                 datasets.push(val.total);
        //                 label.push(val.products.name);
        //             });

        //             myChart.update();
        //         }
        //     });
        // });
    </script>
@endsection
