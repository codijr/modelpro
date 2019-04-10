/**
 * Executado ao carregar o DOM.
 */
const link_container = '.link-box';
const link_counter = '#link-counter';

let links = 0;

$(document).ready (()=> {
    // Pega o número de links. Dessa forma tenho uma contagem
    // interna precisa desse número.
    links = parseInt($(link_counter).val());
    
    $(link_container).on ('click', '.add-button', () => {
        addLink();
    });
    
    // Usando essa sintaxe (on('click', ...)), novos botões
    // também receberão os listeners
    $(link_container).on ('click', '.remove-button', (event) => {
        removeLink($(event.target).parent());
    });

});

function addLink () {
    const element = $('\n'+
    '<div class="link-wrapper">\n'+
        '<input type="text" name="link'+(links+1)+'" required>\n'+
        '<button type="button" class="remove-button">-</button>\n'+
    '</div>');
    $(link_container).append(element);
    links += 1;
    $(link_counter).val(links);
}

function removeLink (link_wrapper) {
    link_wrapper.remove();
    links -= 1;
    $(link_counter).val(links);
}

function addMember () {

}

function removeMember (member_wrapper) {
    member_wrapper.remove();
}
