/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Interaction for the Ons team module
 *
 * @author Stijn Schets <stijn@schetss.be>
 */
jsBackend.ons_team =
{
    // constructor
    init: function()
    {
        // do meta
        if ($('#naam').length > 0) $('#naam').doMeta();

    }
}

$(jsBackend.ons_team.init);
