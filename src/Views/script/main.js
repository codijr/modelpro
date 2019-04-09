/**
 * Executado ao carregar o DOM.
 */
$(document).ready (()=> {
    const link_container = '.link-box';
    const link_counter = '#link-counter';
    let links = 0;
    
    // Pega o número de links. Dessa forma tenho uma contagem
    // interna precisa desse número.
    links = parseInt($(link_counter).val());
    
    $(link_container).on ('click', '.add-button', () => {
        addLinkField(links, link_counter, link_container);
    });
    
    // Usando essa sintaxe (on('click', ...)), novos botões
    // também receberão os listeners
    $(link_container).on ('click', '.remove-button', (event) => {
        removeLinkField(links, link_counter, $(event.target).parent());
    });

});

function addLinkField (links, link_counter, link_container) {
    const element = $('\n'+
    '<div class="link-wrapper">\n'+
        '<input type="text" name="link'+(links+1)+'" required>\n'+
        '<button type="button" class="remove-button">-</button>\n'+
    '</div>');
    $(link_container).append(element);
    links += 1;
    $(link_counter).val(links);
}

function removeLinkField (links, link_counter, link_wrapper) {
    link_wrapper.remove();
    links -= 1;
    $(link_counter).val(links);
}