<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>sand_WhatsApp</title>
    
    <style>
       
       *
       {
           direction: rtl;
       }
       
       html
       {
           max-width: 500px;
           margin: auto;
       }
       
       body
       {
        background-image: url(img.jpg);
        background-repeat: no-repeat;
        background-size: cover;
     
       }
       .form
       {
        max-width: 400px;
        height: 200px;
        margin: auto;
        margin-top: 45%;
        background-color: azure;
        border-radius: 6px;
        padding-top: 3%;
       } 
       
       .title
       {
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 20%;
        display: flex
       }
       .title img
       {
        height: 100%;
        margin-left: 4%;
       }
       .title h3
       {
           color: #115a11;
       }
       .form form
       {
        height: 80%;
        display: flex;
        flex-direction: column;
        align-items: center;
       }
       
        .form form input
        {
        margin-top: 9%;
        width: 75%;
        height: 31px;
        border-radius: 4px;
        border: 1px solid gray;
        padding-right: 2%;
        }
        .form form button
        {
        background: #0c440e;
        margin-top: 14px;
        border: 1px solid green;
        padding: 2%;
        border-radius: 5px;
        width: 53px;
        color: snow;
        text-decoration: none;
        text-align: center;
        }
        
        
        
        
    </style>
</head>
<body>
    
    
    <div class="form">
        <div class="title"> 
            <img src="whatsapp.png" alt="whatsapp">
            <h3>راسل واتساب بدون تسجيل الأسم </h3>
        </div>
        
    
        
        <form action="go_whatS.php" method = "POST">
            
            <input type="number" name="number" placeholder="ادخل رقم الجوال أبد برمز الدولة بدون +"> 
            <button name="sand"> أذهب </button>
        
        </form>
    </div>
    
</body>
</html>