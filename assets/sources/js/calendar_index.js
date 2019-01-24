function calendar(id, year, month, isCabinet, data) {
  var Dlast = new Date(year, month + 1, 0).getDate(),
      D = new Date(year, month, Dlast),
      DNlast = new Date(D.getFullYear(), D.getMonth(), Dlast).getDay(),
      DNfirst = new Date(D.getFullYear(), D.getMonth(), 1).getDay(),
      calendar = '<tr>',
      month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]
      monthAbbr = ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"];
  if (DNfirst != 0) {
    for (var i = 1; i < DNfirst; i++) calendar += '<td>';
  } else {
    for (var i = 0; i < 6; i++) calendar += '<td>';
  }
  for (var i = 1; i <= Dlast; i++) {
    var dateCont = '';
    var dateClass = '';

    if (data && data[(new Date(D.getFullYear(), D.getMonth(), i)).valueOf()]) {
      dateCont = data[(new Date(D.getFullYear(), D.getMonth(), i)).valueOf()];
      dateClass = 'not-empty'
    }

    if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
      calendar += '<td class="today' + dateClass + '" data-date="' + (new Date(D.getFullYear(), D.getMonth(), i)).valueOf() + '">' + i + '<span>' + dateCont + '</span>';
    } else {
      calendar += '<td class="' + dateClass + '" data-date="' + (new Date(D.getFullYear(), D.getMonth(), i)).valueOf() + '">' + i + '<span>' + dateCont + '</span>';
    }
    if (new Date(D.getFullYear(), D.getMonth(), i).getDay() == 0) {
      calendar += '<tr>';
    }
  }
  for (var i = DNlast; i < 7; i++) calendar += '<td class="empty"> ';
  document.querySelector('#' + id + ' tbody').innerHTML = calendar;
  document.querySelector('#' + id + ' thead td:nth-child(2)').innerHTML = month[D.getMonth()] + ' ' + (!isCabinet ? D.getFullYear() : '');
  document.querySelector('#' + id + ' thead td:nth-child(2)').dataset.month = D.getMonth();
  document.querySelector('#' + id + ' thead td:nth-child(2)').dataset.year = D.getFullYear();
  if (document.querySelectorAll('#' + id + ' tbody tr').length < 6) {
    // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
    document.querySelector('#' + id + ' tbody').innerHTML += '<tr><td class="empty extra"> <td class="empty extra"> <td class="empty extra"> <td class="empty extra"> <td class="empty extra"> <td class="empty extra"> <td class="empty extra"> ';
  }

  if (isCabinet) {
    document.querySelector('#' + id + ' thead tr:nth-child(1) td:nth-child(1)').innerHTML = '<b>‹</b>' + ' ' + (monthAbbr[D.getMonth() - 1] || monthAbbr[monthAbbr.length - 1]);
    document.querySelector('#' + id + ' thead tr:nth-child(1) td:nth-child(3)').innerHTML = (monthAbbr[D.getMonth() + 1] || monthAbbr[0]) + ' ' + '<b>›</b>';
  }

  if (isCabinet || data) {
    var dates = document.querySelectorAll('#' + id + ' tbody td:not(.empty):not(.today)')

    Array.prototype.forEach.call(
      dates,
      function (date) {
        date.onclick = function (e) {
          var curDate = document.querySelector('#' + id + ' tbody .active')

          if (curDate) {
            curDate.classList.remove('active');
          }

          if (e.target.tagName === 'SPAN') {
            e.target.parentNode.classList.add('active');
          } else {
            e.target.classList.add('active');
          }


        }
      }
    );
  }
}