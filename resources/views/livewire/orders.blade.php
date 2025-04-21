<div>

    <div class='container-fluid'>
        <div  class="row">

            <div class="col-md-12 text-center">

                <h2 class="display-3 mt-3 fw-bold ">
                    Shopify Orders
                </h2>

            </div>

        </div>

    </div>


    <div class='container mt-4'>

        <div class='container-fluid'>
            <div  class="row my-2">
    
                <div class="col-md-12 text-center">
    
                   <div class="d-flex justify-content-end">
                    
                     <button class="btn btn-primary" wire:click="refreshTable">
                        Refresh
                     </button>


                     <button class="btn btn-danger mx-2" wire:click="truncateTable">
                        Truncate
                     </button>

                   </div>
    
                </div>
    
            </div>
    
        </div>


        <div  class="row">

            <div class="col-md-12 text-center">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">City</th>
                        <th scope="col">Zip</th>
                        <th scope="col">Country Code</th>
                        <th scope="col">Province</th>
                        <th scope="col">Country</th>
                        <th scope="col">Address</th>
                        <th scope="col">Currency</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($orders as $order)

                      <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->zip }}</td>
                        <td>{{ $order->country_code }}</td>
                        <td>{{ $order->province}}</td>
                        <td>{{ $order->country}}</td>
                        <td>{{ $order->address}}</td>
                        <td>{{ $order->currency}}</td>
                        <td>{{ $order->total}}</td>
                      </tr>

                      @endforeach

                    </tbody>
                  </table>

            </div>

        </div>

    </div>

</div>
