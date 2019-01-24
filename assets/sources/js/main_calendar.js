var deputyData = {
  1539550800000: 'Название мероприятия 1',
  1539982800000: 'Название мероприятия 2',
}

if (document.querySelector('#calendar')) {
  calendar("calendar", new Date().getFullYear(), new Date().getMonth(), false);
  // переключатель минус месяц
  document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function () {
    calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month) - 1, false);
  };
  // переключатель плюс месяц
  document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function () {
    calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month) + 1, false);
  };
}
/*
if (document.querySelector('#deputy-calendar')) {
            $.ajax({
                type: 'POST',
                url: '/cabinet/assistant-deputy/calendar/api.php',
                dataType: 'json',
                data: {
                    'time-zone': Intl.DateTimeFormat().resolvedOptions().timeZone
                },
                success: function (data) {
                    if (data && data.items) {
                        let deputyData = data.items;
                        // console.log(deputyData);

                        calendar("deputy-calendar", new Date().getFullYear(), new Date().getMonth(), false, deputyData);
                        // переключатель минус месяц
                        document.querySelector('#deputy-calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function () {
                            calendar("deputy-calendar", document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.month) - 1, false, deputyData);
                        };
                        // переключатель плюс месяц
                        document.querySelector('#deputy-calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function () {
                            calendar("deputy-calendar", document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.month) + 1, false, deputyData);
                        };
                    }
                    data = null;
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                    console.error('Error send ajax');
                }
            });// End ajax

        }*/

if (document.querySelector('#deputy-calendar')) {
  calendar("deputy-calendar", new Date().getFullYear(), new Date().getMonth(), false, deputyData);
  // переключатель минус месяц
  document.querySelector('#deputy-calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function () {
    calendar("deputy-calendar", document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.month) - 1, false, deputyData);
  };
  // переключатель плюс месяц
  document.querySelector('#deputy-calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function () {
    calendar("deputy-calendar", document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#deputy-calendar thead td:nth-child(2)').dataset.month) + 1, false, deputyData);
  };
}

if (document.querySelector('#calendar-cabinet')) {
  calendar("calendar-cabinet", new Date().getFullYear(), new Date().getMonth(), true);
  // переключатель минус месяц
  document.querySelector('#calendar-cabinet thead tr:nth-child(1) td:nth-child(1)').onclick = function () {
    calendar("calendar-cabinet", document.querySelector('#calendar-cabinet thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar-cabinet thead td:nth-child(2)').dataset.month) - 1, true);
  };
  // переключатель плюс месяц
  document.querySelector('#calendar-cabinet thead tr:nth-child(1) td:nth-child(3)').onclick = function () {
    calendar("calendar-cabinet", document.querySelector('#calendar-cabinet thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar-cabinet thead td:nth-child(2)').dataset.month) + 1, true);
  };
}