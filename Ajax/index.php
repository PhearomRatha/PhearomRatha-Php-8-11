<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form id="form" style="display:none">
        <input type="text" id="name" placeholder="name" required>
        <input type="text" id="gender" placeholder="gender" required>
        <input type="text" id="major" placeholder="major" required>
        <button type="submit" id="submit">submit</button>
    </form>

<button type="button" class="btn btn-primary m-5" id="create">Create</button>

<table class="table w-75 m-auto text-center ">
    <thead class="table-dark text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Major</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody id="result">
       

     
        
    </tbody>

</table>
    
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   
    $(document).ready(function(){
        $("#create").click(function(e){
            e.preventDefault();
            $("#form").show();
            $("#submit").click(function(){
                let data = new FormData();
                data.append("name",$("#name").val());
                data.append("gender",$("#gender").val());
                data.append("major",$("#major").val());
                console.log(data);
                $.ajax({
                    url:"insert.php",
                    type:"POST",
                    data:data,
                    processData:false,
                    contentType:false,

                    // respond
                    success:function(res){
                        console.log(res);
                        if(res == "insert success"){
                            alert("insert to db success");
                            clear();
                        }else{
                            alert(res);
                        }
                    },
                    error:function(err){ 
                        console.log(err);
                        
                    }
                })
                
                
            })
        })
        
    

       // select 
        $.ajax({
            url:"select.php",
            type:"GET",
            dataType:"json",
            success:function(res){
                console.log(res);
                let result="";
                res.forEach(function(row){
                    result += ` 
                      <tr>
                            <td>${row.id}</td>
                            <td> ${row["stu-name"]}</td>
                            <td>${row["stu-gender"]}</td>
                            <td>${row["stu-major"]}</td>
                            <td><a href="" class="btn btn-outline-danger">Remove</a></td>
                            <td><a href="" class="btn btn-outline-warning">Update</a></td>
                        </tr>
                    `;
                })
                $("#result").html(result);
                console.log( $("#result").html=result);
               // document.getElementById("result").innerHTML=result;
                
            }



        })
       
       
    })

    function clear(){
        $("#form")[0].reset();
         
    }
  

</script>