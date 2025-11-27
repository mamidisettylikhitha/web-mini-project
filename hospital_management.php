*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f5f5f5;
}

/* Navigation Bar */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
    background:#0066cc;
    color:white;
    position:sticky;
    top:0;
}

.navbar ul{
    list-style:none;
    display:flex;
    gap:25px;
}

.navbar a{
    color:white;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.navbar a:hover{
    color:yellow;
}

.section{
    padding:70px 60px;
    text-align:center;
}

.home{
    background:url('hospital.jpg') center/cover no-repeat;
    color:white;
    padding:150px 20px;
}

h1,h2{
    margin-bottom:20px;
}

p{
    margin-bottom:20px;
    font-size:18px;
}

/* Buttons */
.btn{
    padding:10px 25px;
    background:#0066cc;
    border:none;
    color:white;
    cursor:pointer;
    border-radius:5px;
    transition:0.3s;
}

.btn:hover{
    background:#004c99;
}

.btn-small{
    padding:5px 12px;
    background:#00aaff;
    border:none;
    color:white;
    cursor:pointer;
    border-radius:4px;
}

table{
    width:90%;
    margin:auto;
    border-collapse:collapse;
}

table, th, td{
    border:1px solid gray;
}

th, td{
    padding:12px;
}

/* Departments Grid */
.grid{
    display:grid;
    grid-template-columns:repeat(4, 1fr);
    gap:20px;
    margin-top:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 6px rgba(0,0,0,0.1);
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

/* Form Section */
.form-box{
    width:40%;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 6px rgba(0,0,0,0.2);
    text-align:left;
}

.form-box input,
.form-box select,
.form-box textarea{
    width:100%;
    padding:10px;
    margin-bottom:15px;
    border:1px solid gray;
    border-radius:5px;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
}

header {
    background: #0d6efd;
    color: white;
    padding: 20px;
    text-align: center;
}

.navbar {
    display: flex;
    justify-content: center;
    background: #003f7f;
    padding: 15px;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 18px;
}

.navbar a:hover {
    text-decoration: underline;
}

.home-container {
    text-align: center;
    padding: 30px;
}

.card-container {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    width: 250px;
    box-shadow: 0 0 10px #ccc;
    text-decoration: none;
    color: #333;
    transition: 0.3s;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px #999;
}

footer {
    text-align: center;
    padding: 15px;
    background: #003f7f;
    color: white;
    margin-top: 40px;
}
.form-section {
    width: 60%;
    margin: auto;
    background: white;
    padding: 25px;
    margin-top: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px #bbb;
}

.doctor-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.doctor-form label {
    font-weight: bold;
}

.doctor-form input,
.doctor-form select {
    padding: 10px;
    font-size: 16px;
    border-radius: 6px;
    border: 1px solid #666;
}

.doctor-form button {
    padding: 12px;
    font-size: 18px;
    background: #0d6efd;
    border: none;
    color: white;
    border-radius: 6px;
    cursor: pointer;
}

.doctor-form button:hover {
    background: #003f7f;
}

.result-box {
    margin-top: 25px;
    background: #eef7ff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px #ccc;
}

.result-box ul {
    padding-left: 20px;
}
.dept-section {
    text-align: center;
    padding: 20px;
}

.dept-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

.dept-card {
    background: white;
    width: 280px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px #ccc;
    transition: 0.3s;
}

.dept-card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px #999;
}

.dept-card h3 {
    margin-bottom: 10px;
    color: #003f7f;
}

.dept-card ul {
    text-align: left;
    margin-top: 10px;
}
.registration-section {
    width: 60%;
    margin: auto;
    background: white;
    padding: 25px;
    margin-top: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px #bbb;
}

.reg-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.reg-form label {
    font-weight: bold;
    margin-top: 10px;
}

.reg-form input,
.reg-form select,
.reg-form textarea {
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    border: 1px solid #555;
}

.reg-form button {
    margin-top: 15px;
    padding: 12px;
    font-size: 18px;
    background: #0d6efd;
    border: none;
    color: white;
    border-radius: 6px;
    cursor: pointer;
}

.reg-form button:hover {
    background: #003f7f;
}

