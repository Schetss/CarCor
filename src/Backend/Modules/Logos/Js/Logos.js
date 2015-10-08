/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Interaction for the Logos module
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
jsBackend.logos =
{
    // constructor
    init: function()
    {
        // do meta
        if ($('#naam').length > 0) $('#naam').doMeta();

    }
}

$(jsBackend.logos.init);
