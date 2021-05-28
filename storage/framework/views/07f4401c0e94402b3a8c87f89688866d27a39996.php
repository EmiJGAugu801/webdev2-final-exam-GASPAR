<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bible Study Request Form</title>
    <style>
        body{
            background-color: #ffffcc;
            margin: 250px 0px;
        }

        div{
            margin: auto;
            width: 40%;
            border: 3px solid #73AD21;
            padding: 10px;
            background-color: #ffffff;
        }
    </style>    
</head>

<body>
    <div id='bxcont'>
        <form>
            <label>Name</label>
            <input type="text" id="Complete Name" name="Cname"><br></br>

            <label>Email Address</label>
            <input type="email" id="Email Address" name="Email Add"><br></br>

            <label>Contact Number</label>
            <input type="number" id="Contact number" name="C no."><br></br>

            <label>Birthdate</label>
            <input type="date" id="Birthdate" name="Bdate"><br></br>

            <label>Religious Affiliation</label>
            <input type="text" id="Religious Affiliation" name="religion"><br></br>

            <label>Bible Study Date</label>
            <input type="date" id="bs_date" name="BSdate"><br></br>

            <label for="Time">Bible Study Time</label>
            <input list="batch" id="bs_time" name="BStime"><br></br>
                <datalist id="batch">
                    <option value="7:30 AM">
                    <option value="9:00 AM">
                    <option value="11:30 AM">
                    <option value="1:00 PM">
                </datalist>

            <label for="BSlocal">Bible Study Location</label>
            <input list="locals" id="BSlocal" name="name"><br></br>
                <datalist id=locals>
                    <option value="MCGI Convention, Apalit, Pamapanga">
                    <option value="Local ng Quezon, Quezon, Nueva Ecija">
                    <option value="Local ng Licab, Licab, Nueva Ecija">
                </datalist>

            <input type="submit" value="Submit">

        </form>
    </div>        
    
</body>
</html><?php /**PATH C:\Users\Admin 1\bibleStudy-request\resources\views/bible_study_request_form.blade.php ENDPATH**/ ?>