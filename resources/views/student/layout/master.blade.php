<html>
    <head>
    
        <title>@yield("title")</title>
            <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <style>
                        .owtcontainer{margin-top:50px;}
                        .btn{margin-top:-50px;}
                        .card-header{background-color:Purple;}
                        .card-header h1{color:white;}
                        .card{background-color:#00FFFF;}
                        .table{border: 1px solid black;}
                        .border{border:5px solid #ccc;padding:15px 20px;margin:5px 0;}
                        .delete{margin-left:50;margin-top:-42;}
                        .color{ color: red;}
                        .icon-bar{
                                        width: 50px;
                                        background-color: #555;
                                    }

                                    .icon-bar {
                                        display: block;
                                        text-align: center;
                                        padding: 3px;
                                        transition: all 0.3s ease;
                                        color: white;
                                        font-size: 36px;
                                    }

                                    .icon-bar:hover {
                                        background-color: #000;
                                    }
                </style>
    <head>
    <body>
    
       <div class="container owtcontainer ">
            <div class="row" style="margin-top:-30;">
                <div style="margin-left:400;margin-top:-30;">  
                        @if(session()->has("stdmessage"))
                                 <div  class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session()->get("stdmessage")}}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                                <script>
                                    //window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 500);
                                    $(".alert").fadeTo(3000,500).slideUp(500,function(){$(".alert").slideUp(500);});
                                </script>
                        @endif
                </div>        
                        @if(session()->has("deletemessage"))
                                <div style="margin-left:20;margin-top:-30;"> 
                                        <div  class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>{{session()->get("deletemessage")}}</strong> 
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    
                                        <script>
                                            //window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});}, 500);
                                            $(".alert").fadeTo(2000,500).slideUp(500,function(){$(".alert").slideUp(500);});
                                        </script>
                                </div>        
                        @endif
                         
                                          
                @section("body")
                @show
            </div>    
        </div>
       
    </body>

</html> 