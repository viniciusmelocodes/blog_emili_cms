<script>
    /* Global-js */
    function replaceSpecialCharacters(string) {
        return string.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
    }

    function replaceWhiteSpaceWithUnderline(string) {
        return string.replace(/\s/g, '-')
    }

    function formatSlug(string) {
        let stringNew = replaceSpecialCharacters(string)
        return replaceWhiteSpaceWithUnderline(stringNew)
    }

    function formatSlugOnBlur(idInput) {
        $('#' + idInput).val(formatSlug($('#' + idInput).val()))
    }
</script>