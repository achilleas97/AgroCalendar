@extends('layouts.layout')

@section('content')
<div class="container-fluid">        
    <div class="row">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header text-center">
              <h2>Φροντίδες</h2>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>  
            </div>        
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">            
            <div class="card-header text-center">
              <h2>Δημιουργία Φροντίδας</h2>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Είδος</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Περιγραφή</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Χωράφι</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
              </div>
              <div style="position: relative">
                <input class="form-control" type="text" id="datetime" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>       
</div>    
@endsection
 