(function(api) {

    api.sectionConstructor['movie-cinema-blocks-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const movie_cinema_blocks_section_lists = ['banner', 'service'];
    movie_cinema_blocks_section_lists.forEach(movie_cinema_blocks_homepage_scroll);

    function movie_cinema_blocks_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('movie_cinema_blocks_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);