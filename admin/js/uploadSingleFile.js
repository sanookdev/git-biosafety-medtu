$(document).ready(() => {
    var dataUpload = {};
    $('#fileInput').on('change', (e) => {
        //   var filename = $(this);
        var filename = $('#fileInput').val().replace(/C:\\fakepath\\/i, '')
        $('label[for=fileInput]').text(filename);
    })

    $('.btn_preview').on('click', (e) => {
        e.preventDefault();
        await previewFile();
    })
    $('.btn_upload').on('click', (e) => {
        e.preventDefault();
        axios.post('./api/informations.php', {
            action: 'uploadData',
            data: dataUpload
        }).then((res) => {
            console.log(res);
        })
    })

    function _(el) {
        return document.getElementById(el);
    }

    async function previewFile() {
        var file = _("fileInput").files[0];
        var formdata = new FormData();
        formdata.append("fileInput", file);
        await axios.post('./api/previewUploadFile.php', formdata, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then((res) => {
            console.log(res);
            dataUpload = res.data;
            if (dataUpload.length > 0) {
                $('#report_table').prop('hidden', false);
                $('.btn_upload').prop('hidden', false);
                let outputHtml = '';
                $.each(dataUpload, function(keys, values) {
                    outputHtml += '<tr>';
                    $.each(values, function(key, value) {
                        outputHtml += '<td>' + value + '</td>';
                    });
                    outputHtml += '</tr>';
                });
                $('.report_data').html(outputHtml);
            } else {
                $('#report_table').prop('hidden', true);
                $('.btn_upload').prop('hidden', true);
            }
        })
    }

    async function upload() {
        await axios.post('./api/informations.php', {
            action: 'uploadData',
            data: dataUpload
        }).then((res) => {
            console.log(res);
        })
    }
})