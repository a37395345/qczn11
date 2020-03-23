function weeklyCalendar(dataArr, options, showData) {
    // console.log(dataArr)

    var that = this, _date = new Date(),
        currentDay = _date.getDay(),
        weekNum = $("#week_title").attr("ids");
    var description = {
        firstTitle: '信息',
        nextTitle: '信息',
        listTitle: '信息',
        methodsTitle: '信息'
    }
    var weeknum = 0
    var format = function (num) {
        var _f = num < 10 ? '0' + num : num;
        return _f
    }
    //星期
    var createWeek = function () {
        var lis = '';
        var weeks_ch = ['车辆/时间', '日', '一', '二', '三', '四', '五', '六',];
        for (var i = 0, len = weeks_ch.length; i < len; i++) {
            lis += '<li>' + weeks_ch[i] + '</li>';
        };
        $("#weekUl").html(lis);
    }
    var countTime = function (n) {
        var getTime = _date.getTime() + (24 * 60 * 60 * 1000) * n;
        var needDate = new Date(getTime);
        var getYear = needDate.getFullYear();
        var getMonth = needDate.getMonth() + 1;
        var getDate = needDate.getDate();
        var obj = { 'year': getYear, 'month': getMonth, 'date': getDate };
        return obj
    }
    var createDate = function (cDay) {
        var _cDay = cDay;
        var dateHtml = '';
        var currY = format(_date.getFullYear()),
            currM = format(_date.getMonth() + 1),
            currD = format(_date.getDate());
        for (var i = _cDay; i < _cDay + 7; i++) {
            if (currY == countTime(i).year && currM == countTime(i).month && currD == countTime(i).date) {
                dateHtml += '<section data-year=' +
                    countTime(i).year + ' data-month=' +
                    countTime(i).month + ' data-date=' +
                    countTime(i).date + '>'
                    + '<h2 class="current">'
                    + '<a href="javascript:void(0)">' + format(countTime(i).date) + '</a>'
                    + '</h2>'
                    + '</section>'
            } else {
                dateHtml += '<section data-year=' + countTime(i).year + ' data-month=' + countTime(i).month + ' data-date=' + countTime(i).date + '>'
                    + '<h2>'
                    + '<a href="javascript:void(0)">' + format(countTime(i).date) + '</a>'
                    + '</h2>'
                    + '</section>'
            }
        }
        $("#calendarBox").html(dateHtml); reminder();
    }
    var reminder = function () {
        var optionsUl = $(".optionsUl");
        $.each(optionsUl, function (index, element) {
            var optionsHtml = '';
            let $element = $(element);
            let ele_year = format($element.attr('data-year')),
                ele_month = format($element.attr('data-month')),
                ele_date = format($element.attr('data-date'));
            $.each(dataArr, function (ind, ele) {
                let show_date = ele.date.split('-');
                if (ele_year == show_date[0] && ele_month == show_date[1] && ele_date == show_date[2]) {
                    $element.prev().addClass("active");
                    $.each(ele.items, function (_index, _ele) {
                        optionsHtml += '<td>'
                            + '<p>' + _ele.classTime + '</p>'
                            + '<p>' + _ele.className + '</p>'
                        if (showData) {
                            optionsHtml += '<article>'
                                + '<a href="javascript:void(0)">' + description.firstTitle + '</a>'
                                + '<a href="javascript:void(0)" onclick="downListShow()">' + description.nextTitle + '</a>'
                                + '</article>'
                                + '<div class="down_list" onclick="downListHide(this)">'
                                + '<div class="down_list_c" onclick="stopmp()">'
                                + '<h1>' + description.listTitle + '</h1>'
                                + '<div class="jy_list">'
                            $.each(_ele.downList, function (index_, element_) {
                                optionsHtml += '<p>' + element_.downName + '<a data-address="' + element_.downAddress + '" href="javascript:void(0)">' + description.methodsTitle + '</a></p>'
                            })
                            optionsHtml += '</div>'
                                + '<h5 onclick="closeDownList(this)"></h5>'
                        }
                        optionsHtml += '</td>'
                    })
                    return true
                }
            })
            $(element).html(optionsHtml);
        })
    }
    var changezhou = function (weekNum) {
        weeknum = weekNum
        changeWeek(weeknum)
        inputChangeTime()
        ChangeAFew()
        // console.log(weeknum +"weeknum")
        return weeknum
    }
    var changeWeek = function (weekNum) {
        createDate(-currentDay + (1 * weekNum));
        $("#week_title").attr("ids", weekNum);
        titleTime();
        createdTable()
    }
    change = changezhou
    $("#prevWeek").on("click", function () {
        weeknum--;
        changezhou(weeknum);
        gettnTable();
        
        
    })
    $("#nextWeek").on("click", function () {
        weeknum++;
        changezhou(weeknum);
        gettnTable();
        
        
    })
    // 改变周几
    function ChangeAFew() {
        tdDay = {
            tdDate1: $("#calendarBox").children().eq(0).attr("data-Date"),
            tdYear: $("#calendarBox").children().eq(0).attr("data-year"),
            tdMonth: $("#calendarBox").children().eq(0).attr("data-month"),
        };
        var SeveralWeeks = new Date(tdDay.tdYear, tdDay.tdMonth - 1, tdDay.tdDate1).getDay();
        var lis = ""
        switch (SeveralWeeks) {
            case 1: {

                var weeks_ch = ['车辆/时间', '一', '二', '三', '四', '五', '六', '日',];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                console.log; (lis)
                $("#weekUl").html(lis);
                break;
            }
            case 2: {
                var weeks_ch = ['车辆/时间', '二', '三', '四', '五', '六', '日', '一',];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
            case 3: {
                var weeks_ch = ['车辆/时间', '三', '四', '五', '六', '日', '一', '二',];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
            case 4: {
                var weeks_ch = ['车辆/时间', '四', '五', '六', '日', '一', '二', '三',];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
            case 5: {
                var weeks_ch = ['车辆/时间','五', '六', '日', '一', '二', '三', '四', ];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
            case 6: {
                var weeks_ch = ['车辆/时间', '六','日', '一', '二', '三', '四', '五', ];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
            case 0: {
                var weeks_ch = ['车辆/时间', '日', '一', '二', '三', '四', '五', '六',];
                for (var i = 0, len = weeks_ch.length; i < len; i++) {
                    lis += '<li>' + weeks_ch[i] + '</li>';
                };
                $("#weekUl").html(lis);
                break;
            }
        }
    }
// input框内时间跟着改变
    function inputChangeTime() {
        tdDay = {
            tdDate1: $("#calendarBox").children().eq(0).attr("data-Date"),
            tdYear: $("#calendarBox").children().eq(0).attr("data-year"),
            tdMonth: $("#calendarBox").children().eq(0).attr("data-month"),
        };
        $("#selectTime").val(tdDay.tdYear + '-' + tdDay.tdMonth + '-' + tdDay.tdDate1)
    }
    var titleTime = function () {
        var section = $("#calendarBox").find("section");
        var titleHtml = '';
        titleHtml += format($(section[0]).attr('data-year')) + '年' + format($(section[0]).attr('data-month')) + '月' + format($(section[0]).attr('data-date')) + '日 - '
            + format($(section[6]).attr('data-year')) + '年' + format($(section[6]).attr('data-month')) + '月' + format($(section[6]).attr('data-date')) + '日'; $("#showDate").html(titleHtml);
    }
    $("#calendarBox").on("click", "h2", function () {
        var textDate = $(this).text(); $(this).addClass("select");
        $(this).parent().siblings().find('h2').removeClass("select"); options['clickDate'](textDate);
    })
    var initWeeklyCalendar = function () {
        createWeek();
        createDate(-currentDay);
        titleTime();
    }()
    $(".jy_list").on("click", "a", function () {
        options['clickDownLoad'](this);
    })



}
function downListShow(that) {
    that.parentNode.parentNode.getElementsByClassName('down_list')[0].style.display = "block";
}
function downListHide(that) {
    that.style.display = "none";
}
function closeDownList(that) {
    that.parentNode.parentNode.style.display = "none";
}
function stopmp(e) {
    window.event ? window.event.cancelBubble = true : e.stopPropagation();
}


