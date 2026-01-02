@extends('user.layout.master')
@section('title')
Loan information
@endsection

@section('content')
  <main class="main">

     <style>
   
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
    th { background: #d80610ff; color: white; position: sticky; top: 0; z-index: 2; }
    tr:nth-child(even) { background: #f2f2f2; }
    .calculator { margin-top: 40px; padding: 20px; background: #eef5ff; border-radius: 10px; }
    .calculator input, .calculator button { padding: 10px; margin: 6px 0; width: 100%; box-sizing: border-box; }
    .calculator button { background: #b60f18ff; color: white; border: none; cursor: pointer; }
    .calculator button:hover { background: #f50e0eff; }
    .result { margin-top: 12px; font-weight: bold; }
  </style>
</head>



@section('content')

<div class="container">
  <p style="font-size:30px;">Bank-wise Personal Loan Info</p>
 
  
<table style="width:100%; border-collapse: collapse; text-align: center;">
    <thead>
        <tr style="background-color:#f2f2f2;">
         
            <th >Bank Name</th>
            <th >Max Loan Amount (PKR)</th>
            <th >Interest Rate (%)</th>
            <th >Max Tenure (Years)</th>
            <th >Notes / Remarks</th>
            <th >Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bankloans as $item)
          @foreach($item->bankloan as $bankloan)
          <tr>
        
              <td >{{ $bankloan->bank }}</td>
              <td >{{ number_format($bankloan->amount) }}</td>
              <td >{{ $bankloan->interest }}</td>
              <td >{{ $bankloan->tenure_years }}</td>
              <td >{{ $bankloan->notes }}</td>
              <td >{{ $item->name }}</td>
          </tr>
          @endforeach
        @endforeach
    

        </tbody>
    </table>
    
</div>


  <div class="calculator">
    <p style="font-size:30px;">Buisness Loan EMI Calculator</p>
    <label>Loan Amount (PKR):</label>
    <input type="number" id="loanAmount" placeholder="e.g. 500000">
    <label>Annual Interest Rate (%):</label>
    <input type="number" step="0.01" id="interestRate" placeholder="e.g. 13.5">
    <label>Tenure (Years):</label>
    <input type="number" id="tenure" placeholder="e.g. 4">
    <button onclick="calculateEMI()">Calculate EMI</button>
    <div class="result" id="result"></div>
  </div>

</div>


<script>
  function calculateEMI() {
    const P = parseFloat(document.getElementById('loanAmount').value);
    const annualRate = parseFloat(document.getElementById('interestRate').value);
    const years = parseFloat(document.getElementById('tenure').value);

    if (!P || !annualRate || !years) {
      document.getElementById('result').innerText = "Please enter valid values.";
      return;
    }
    const R = annualRate / 12 / 100;
    const N = years * 12;
    const EMI = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);
    document.getElementById('result').innerText = `Monthly EMI: PKR ${EMI.toFixed(2)}`;
  }
</script>
  </main>

@endsection

