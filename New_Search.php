<?php require-once('Header_For_All.php');?>
<body>
<div class="container-mt-5">
<div class="row justify-content-center">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="input-group mb-5">
<div class="input-group-prepend">
 
     <button class="btn btn-sucess dropdown-toggle" data-toggle="dropdown" id="text">Filter</button>
                    <div class="dropdown-menu">
                    <a href="#" class="dropdown-item" onclick="changeval(0);">By Name</a>
                        <a href="#" class="dropdown-item"onclick="changeval(1);">By Country</a>
                        <a href="#" class="dropdown-item"onclick="changeval(2);">By Age</a>
                        <a href="#" class="dropdown-item"onclick="changeval(3);">By Language</a>
                        <a href="#" class="dropdown-item"onclick="changeval(4);">By Gender</a>
                    </div>
            </div>
<input type="search" class="form-control" placeholder="Enter Term to Search"
       id="myinput" onkeyup="search();">   
    </div>    
    <div class="container table-responsive ">
    <table class="table table-bordered" id="mytable">
        <thead>
            <th>Name</th>
            <th>Country</th>
            <th>Age</th>
            <th>Language</th>
            <th>Gender</th>
        </thead>
        <tbody>
        
        <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
               <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
               <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
                    <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
             <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
                   <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
              <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
                    <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
             <tr>
            <td> placeholderk</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            <td> placeholder</td>
            </tr>
        
        </tbody>
        </table>
    </div>    
    </div>
    </div>    
    
    <script>
    
        var i=0;
        var text=document.getElementbyID('text');
        
        function changeval(res){
            if(res==0){i=0; text.innerHTML="By Name";}
        else if(res==1){i=1; text.innerHTML="By Country";}
        else if(res==2){i=2; text.innerHTML="By Age";}
        else if(res==3){i=3; text.innerHTML="By Language";}
        else if(res==4){i=4; text.innerHTML="By Gender";}
        }
        
        function search(){
            
            var input = document.getElementbyID('myinput').value.toUpperCase();
            var table = document.getElementById('mytable');
            
            var tr = table.getElementsByTagnName('tr');
            
            for(var 1=0;1<tr.length;1++){
                
                var td=tr[1].getElementsByTagName('td')[i];
                
                
                if(td){
                    
                    var textval=td.textContent || td.innerHTML;
                    if(textval.toUpperCase().indexOf(input)>-1){
                        tr.[1]style.display="none";
                    }
                    else{
                        tr.[1]style.display="none";
                    }
                }
                
            }
            
            
            
        }
    
    
    
    </script>
    
    </div>











</body>
