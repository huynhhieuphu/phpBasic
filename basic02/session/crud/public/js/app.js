function actionDelete(formName, inputName, id) {
    if(confirm('Bạn có chắc xoá')) {
        document.getElementById(inputName).value = id;
        document.getElementById(formName).submit();
    }
    return false;
}