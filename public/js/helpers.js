/**
 * Make element or array of element visible
 * @param {Element|Element[]} elements - the elements to be shown
 */
function show(elements) {
    elements = elements.length ? elements : [elements];
    for (var index = 0; index < elements.length; index++) {
        elements[index].style.display = 'visible';
    }
}
/**
 * Make element or array of element hidden
 * @param {Element|Element[]} elements - the elements to be hidden
 */
function hide(elements) {
    elements = elements.length ? elements : [elements];
    for (var index = 0; index < elements.length; index++) {
        elements[index].style.display = 'none';
    }
}
/**
 * Get all next siblings of an element
 * @param {Element} element - the element to search for
 */
function getNextElements(element) {
    const nextElements = []
    let nextElement = element

    while (nextElement.nextElementSibling) {
        nextElements.push(nextElement.nextElementSibling)
        nextElement = nextElement.nextElementSibling
    }

    return nextElements
}