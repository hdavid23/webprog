const {createPool, createPoolCluster} = require('mysql');

const pool = createPool({
    host: 'localhost',
    user:'root',
    password:'',
    connectionLimit: 10
})

pool.query(`select * from zenelejatszo.zenek`, (err, res)=>{
    return console.log(res);
});