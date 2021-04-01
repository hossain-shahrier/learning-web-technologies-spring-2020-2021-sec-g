<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<style>
    .main{
        margin-left: 250px;
        padding: 40px;
    }
    .header{
        display: flex;
        justify-content: space-between;
    }
    .card-body{
        /* display: flex; */
        margin-top: 50px;
    }
    .card{
        color: white;
        margin-bottom: 20px;
        padding : 40px;
        max-width: 150px;
        border: 1px solid #c3c3c3;
        border-radius: 10px;
        background-color :#2B7A78;
        opacity: 1;
        transition: 0.3s;
    }
    .card:hover {opacity : 0.9}
    .main input{
        padding: 7px;
        border: 0.5px solid gray;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
        border-radius: 20px;
        width: 500px;
    }
    .search{
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .search button{
        margin-top: 5px;
        height: 30px;
        padding: 10px;
        border-radius: 15px;
        text-align: center;
        line-height: 5px;
    }
</style>
</head>