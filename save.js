const express = require('express');

const mysql = require('mysql');

const connection = mysql.createConnection({
    host:'localhost',
    port:3306,
    database:'zenelejatszo',
    user:'root',
    password:''
});

var database_connection_status = '';

connection.connect(function(error){
    if(error)
    {
        database_connection_status = '<p>MySQL Database Connection Error</p>';
    }
    else
    {
        database_connection_status = '<p>MySQL Database Connection Success</p>';
    }
});

const app = express();

app.use(express.urlencoded());

app.get('/', function(request, response, next){
    response.send(`
    <div class="main">
        <div class="container">
            <div class="addvest">
            `+database_connection_status+`
                <form action="" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>Songname:</td>
                            <td><input type="text" name="title" placeholder="Song name"></td>
                        </tr>
                        <tr>
                            <td>Subtitle:</td>
                            <td><input type="text" name="subtitle" placeholder="Song subtitle"></td>
                        </tr>
                        <tr>
                            <td>Select Image:</td>
                            <td><input type="file" name="image"></td>
                        </tr>
                        <tr>
                            <td>Select Music:</td>
                            <td><input type="file" name="music"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Music" class="btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>
    `);
});

app.post('/', function(request, response, next){

    response.send(request.body);
});

app.listen(2000);