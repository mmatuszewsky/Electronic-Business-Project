/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    Mailchimp
 * @copyright PrestaChamps
 * @license   commercial
 *
 * @param chunk_size
 * @returns {Array}
 */
Array.prototype.chunk = function (chunk_size) {
    var temp = this.slice(0),
        results = [];

    while (temp.length) {
        results.push(temp.splice(0, chunk_size));
    }
    return results;
};
