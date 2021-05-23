function showTime(){
    var d = new Date();
    var year = d.getFullYear();
    var month = d.getMonth();
    var date = d.getDate();
    var day =d.getDay();
    var hour = d.getHours();
    var min = d.getMinutes();
    var sec = d.getSeconds();

    switch(month){
        case 1:
        month="January";
        break;
        case 2:
        month="February";
        break;
        case 3:
        month="March";
        break;
        case 4:
        month="April";
        break;
        case 5:
        month="May"
        break;
        case 6:
        month="June"
        break;
        case 7:
        month="July"
        break;
        case 8:
        month="August"
        break;
        case 9:
        month="September"
        break;
        case 10:
        month="October"
        break;
        case 11:
        month="November"
        break;
        case 12:
        month="December"
        break;
        default:

    }

    switch(day){
        case 1:
        day="Monday";
        break;
        case 2:
        day="Tuesday";
        break;
        case 3:
        day="Wednesday";
        break;
        case 4:
        day="Thursday";
        break;
        case 5:
        day="Friday";
        break;
        case 6:
        day="Saturday";
        break;
        case 7:
        day="Sunday";
        break;
        default:   
    }


    //console.log("old: ", hour);
    var MV = "AM";
    if(hour == 12){
        MV = "PM";
    }
    if(hour > 12){
        hour = hour % 12;
        MV = "PM";
    }
    //console.log("new: ", hour);

    hour = ("0" + hour).slice(-2);
    min = ("0" + min).slice(-2);
    sec = ("0" + sec).slice(-2);

    //console.log("mod: ",hour);

    document.getElementById("clock").innerHTML = "<b>Clock: </b> "+day+" "+date+"th "+month+" "+year+", "+hour+":"+min+":"+sec+" "+MV;
}

setInterval(showTime,1000);