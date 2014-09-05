/*

JS function that auto expands textareas when they get too big. 
Makes it so they don't overflow and show a scrollbar. 

*/
$(document).on('input.textarea', '.autoExpand', function(){
    var minRows = this.getAttribute('data-min-rows')|0,
        rows    = this.value.split("\n").length;

    this.rows = rows < minRows ? minRows : rows;
});