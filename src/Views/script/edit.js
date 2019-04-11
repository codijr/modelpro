/**
 * Executado ao carregar o DOM.
 */
const link_container = '.link-box';
let links = 0;

const member_container = '.member-box';
let members = 0;

$(document).ready (()=> {
    // Pega o número de links. Dessa forma tenho uma contagem interna precisa desse número.
    links = $(link_container +' .link-wrapper').length;
    
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
    if (links + 1 <= 30) {
        links += 1;
        $(link_container).append(element);
    } else {
        return false;
    }
}

function removeLink (link_wrapper) {
    links -= 1;
    link_wrapper.remove();
}

function addMember () {

}

function removeMember (member_wrapper) {
    members -= 1;
    member_wrapper.remove();
}
