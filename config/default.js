module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-taxonomy-util',
            description: 'A taxonomy utility for WordPress.',
            git: 'git://github.com/manovotny/wp-taxonomy-util.git',
            name: 'WP Taxonomy Util',
            slug: 'wp-taxonomy-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-taxonomy-util',
            version: '1.0.1'
        }
    };

}());
