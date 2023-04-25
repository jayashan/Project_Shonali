@extends('admin.base')

@section('content')
<div class="page-container">
        

       
        <div class="row">
            
                            <div class="col-md-auto">
                                <h2 class="title-1 m-b-25">Enquiry Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Full Name</th>
                                                <th>Mobile</th>
                                                <th>Nationality</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Enquiry To</th>
                                                <th class="text-right">Description</th>
                                            
                                                <th width="280px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($enquiries as $enquiry)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $enquiry->full_name }}</td>
                                                <td>{{ $enquiry->mobile }}</td>
                                                <td>{{ $enquiry->nationality }}</td>
                                                <td>{{ $enquiry->email }}</td>
                                                <td>{{ $enquiry->enquiry_to }}</td>
                                                <td>{{ $enquiry->description }}</td>
                                                
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $enquiries->links() !!}
                                </div>
                            </div>

                        </div>

</form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
</div>

@stop