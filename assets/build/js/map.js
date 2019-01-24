var mapData = {
  ardDist: {
    name: 'Ардатовский район'
  },
  arzDist: {
    name: 'Арзамасский район'
  },
  balaDist: {
    name: 'Балахнинский район'
  },
  bolshDist: {
    name: 'Большеболдинский район'
  },
  borDist: {
    name: 'Бор'
  },
  buturDist: {
    name: 'Бутурлинский район'
  },
  bmurashDist: {
    name: 'Большемурашкинский район'
  },
  vachDist: {
    name: 'Вачский район'
  },
  voznesDist: {
    name: 'Вознесенский район'
  },
  volodDist: {
    name: 'Володарский район'
  },
  vorotDist: {
    name: 'Воротынский район'
  },
  voskresDist: {
    name: 'Воскресенский район'
  },
  vyksaDist: {
    name: 'Выкса'
  },
  gagiDist: {
    name: 'Гагинский район'
  },
  gorodDist: {
    name: 'Городецкий район'
  },
  dzerjDist: {
    name: 'Дзержинск'
  },
  diveDist: {
    name: 'Дивеевский район'
  },
  knyagDist: {
    name: 'Княгинский район'
  },
  koverDist: {
    name: 'Ковернинский район'
  },
  krasnoDist: {
    name: 'Краснобаковский район'
  },
  kroctDist: {
    name: 'Краснооктябрьский район'
  },
  kstovDist: {
    name: 'Кстовский район'
  },
  kulebDist: {
    name: 'Кулебаки'
  },
  lukyanDist: {
    name: 'Лукьяновский район'
  },
  lysovDist: {
    name: 'Лысовский район'
  },
  navashDist: {
    name: 'Навашинский район'
  },
  nizhnDist: {
    name: 'Нижний Новгород'
  },
  pavlovDist: {
    name: 'Павловский район'
  },
  pervomDist: {
    name: 'Первомайск'
  },
  pilnDist: {
    name: 'Пильнинский район'
  },
  sergaDist: {
    name: 'Сергачский район'
  },
  sechenDist: {
    name: 'Сеченовский район'
  },
  sokolDist: {
    name: 'Сокольский район'
  },
  sosnDist: {
    name: 'Сосновский район'
  },
  spasDist: {
    name: 'Спасский район'
  },
  tonkDist: {
    name: 'Тонкинский район'
  },
  tonchDist: {
    name: 'Тоншаевский район'
  },
  urenDist: {
    name: 'Уренский район'
  },
  chkalDist: {
    name: 'Чкаловск'
  },
  sharanDist: {
    name: 'Шаранский район'
  },
  shahDist: {
    name: 'Шахунья'
  },
  vetlDist: {
    name: 'Ветлужский район'
  },
  varnaDist: {
    name: 'Варнавинский район'
  },
  semenDist: {
    name: 'Семеновский район'
  },
  shatkDist: {
    name: 'Шатковский район'
  },
  vadDist: {
    name: 'Вадский район'
  },
  perevDist: {
    name: 'Перевозский район'
  },
  dalneDist: {
    name: 'Дальнеконстантиновск'
  },
  bogorDist: {
    name: 'Богородский район'
  },
  pochinDist: {
    name: 'Починковский район'
  }
}

$(document).ready(function() {
  var popup = $('.map-page__image-popup');

  $('.map-page__image svg').on('mousemove', function(e) {
      if (e.target.id && mapData[e.target.id] && mapData[e.target.id].name) {
          popup.text(mapData[e.target.id].name);
          popup.addClass('active');
          popup.css('top', (e.clientY + 15) + 'px');
          popup.css('left', (e.clientX + 15) + 'px');
      } else {
          popup.removeClass('active');
      }
  });

  $('.map-page__image svg').on('mouseleave', function(e) {
      popup.removeClass('active');
  });
});