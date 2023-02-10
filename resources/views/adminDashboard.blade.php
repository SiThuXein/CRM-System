@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")


<div class="container-fluid admin_dashboard">
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/group.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text">{{ count($pending_customer) }}</h4>
                <a href="/admin/dashboard/pipeline" class="text-decoration-none"><h6 class="text-secondary fw-bold text2">Pending Customers</h6></a>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/user.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text" >{{ count($closed_customer) }}</h4>
                <a href="/admin/dashboard/activities" class="text-decoration-none"><h6 class="text-primary fw-bold">Closed Customers</h6></a>
            </div>
               
        </div>

        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/messages.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text">{{ count($complain) }}</h4>
                <a href="/admin/dashboard/complain"><h6 class="text-danger fw-bold">Complains</h6></a>
            </div>
                
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 mt-5 bg-white">
            <div>
                <canvas id="chart1"></canvas>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 mt-5 bg-white">
            <div>
                <canvas id="chart2"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    
    const chart1 = document.getElementById('chart1');

    new Chart(chart1, {
      type: 'doughnut',
      data: {
        labels: [ 'Sale Manager','Sale Person', 'Admin' ],
        datasets: [{
          label: '',
          data: [
            "<?php echo count($role1) ?>",
            "<?php echo count($role2) ?>",
            "<?php echo count($role3) ?>",
          ],
          borderWidth: 1
        }],
      },
 
    });

    const chart2 = document.getElementById('chart2');

    new Chart(chart2, {
      type: 'bar',
      data: {
        labels: ['Current Account','ZeeGwat Account', 'Call Deposit','Fix Deposit','Debit Card','uab pay/pay+','Prepaid/Gift Card'],
        datasets: [{
          label: 'Product Sold Summary',
          data: [
            "<?php echo $current_account ?>",
            "<?php echo $zeegwat_account ?>",
            "<?php echo $call_deposit ?>",
            "<?php echo $fix_deposit ?>",
            "<?php echo $debit_card ?>",
            "<?php echo $pay ?>",
            "<?php echo $prepaid ?>"
            ],
        //   borderWidth: 1,
        }]
      },
      options: {
            indexAxis: 'y',
            backgroundColor:'purple',
            scales: {
            x: {
                suggestedMin: 0,
                suggestedMax: 45
            }
        }      
    }
    });
</script>

@endsection

