document.addEventListener('DOMContentLoaded', function() {
    var options = {
        i18n: {
            months: [
                'Janeir',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Augusto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro'
            ],
            cancel: 'Cancelar',
            clear: 'Limpar',
            monthsShort: [
                'Jan',
                'Fev',
                'Mar',
                'Abr',
                'Mai',
                'Jun',
                'Jul',
                'Ago',
                'Set',
                'Out',
                'Nov',
                'Dez'
            ],
            weekdays: [
                'Domingo',
                'Segunda',
                'Terça',
                'Quarta',
                'Quinta',
                'Sexta',
                'Sábado'
            ],
            weekdaysShort: [
                'Dom',
                'Seg',
                'Ter',
                'Qua',
                'Qui',
                'Sex',
                'Sáb'
            ],
            weekdaysAbbrev: ['D','S','T','Q','Q','S','S']
        },
        format: 'yyyy-mm-dd',
    }
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
});