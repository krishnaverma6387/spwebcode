
document.addEventListener('DOMContentLoaded', function () {

    const { autocomplete, getAlgoliaResults } = window['@algolia/autocomplete-js'];
    const { createQuerySuggestionsPlugin } = window['@algolia/autocomplete-plugin-query-suggestions'];
    const { createLocalStorageRecentSearchesPlugin } = window['@algolia/autocomplete-plugin-recent-searches'];
    const { h } = preact;

    const appId = 'K4UCSTA5PW';
    const apiKey = '5d3389f78b1ae8f73a1377b48e519820';
    const searchClient = algoliasearch(appId, apiKey);

    //recent searches plugin
    const recentSearchesPlugin = createLocalStorageRecentSearchesPlugin({
        key: 'qs-with-rs-example',
        limit: 3,
        transformSource({ source }) {
            return {
                ...source,
                templates: {
                    ...source.templates,
                    header({ state }) {
                        if (state.query) {
                            return null;
                        }

                        return h('div', { class: 'aa-SourceHeader' }, [
                            h('span', { class: 'aa-SourceHeaderTitle' }, 'Your searches'),
                            h('div', { class: 'aa-SourceHeaderLine' })
                        ]);
                    },
                },
            };
        },
    });

    //query suggestions
    const querySuggestionsPlugin = createQuerySuggestionsPlugin({
        searchClient,
        indexName: 'search_keyword',
        getSearchParams() {
            return {
                hitsPerPage: 2,
            };
        },
    });

    autocomplete({
        container: '#autocomplete',
        placeholder: 'Search',
        openOnFocus: true,
        insights: true,
        plugins: [recentSearchesPlugin, querySuggestionsPlugin],
        // plugins: [recentSearchesPlugin],
        getSources({ query, state }) {
            if (!query) {
                return [];
            }

            return [
                {
                    sourceId: 'products',
                    getItems() {
                        return getAlgoliaResults({
                            searchClient,
                            queries: [
                                {
                                    indexName: 'products',
                                    query,
                                    params: {
                                        attributesToSnippet: ['name:10'],
                                        snippetEllipsisText: '…',

                                    },
                                },
                            ],
                        });
                    },
                    templates: {
                        header() {
                            return h('div', { class: 'aa-SourceHeader' },
                                h('span', { class: 'aa-SourceHeaderTitle' }, 'Products'),
                                h('div', { class: 'aa-SourceHeaderLine' })
                            );
                        },
                        item({ item, components }) {
                            const highlightedName = item._highlightResult.name.value.replace(/__aa-highlight__/g, '<mark>').replace(/\/aa-highlight__/g, '</mark>');

                            const hit = item;
                            return h('a', { href: hit.url, className: 'aa-ItemLink' },
                                h('div', { className: 'aa-ItemContent' },
                                    h('div', { className: 'aa-ItemIcon aa-ItemIcon--picture aa-ItemIcon--alignTop' },
                                        h('img', { src: hit.image, alt: hit.name, width: 40, height: 40 }),
                                        h('div', { className: 'aa-ItemContentBody' },
                                            h('div', { className: 'aa-ItemContentTitle' },
                                                h(components.Snippet, { hit, attribute: 'title' })
                                            ),
                                            h('div', { className: 'aa-ItemContentDescription' },
                                                // 'From ',
                                                // h('strong', null, hit.brand),
                                                // h('strong', null, "slick Pattern"),
                                                ' in ',
                                                h('strong', null, hit.Categories)
                                            ),
                                            hit.rating > 0 && h('div', { className: 'aa-ItemContentDescription' },
                                                h('div', { style: { display: 'flex', gap: '1', color: '#ffc107' } },
                                                    Array.from({ length: 5 }, (_, index) => {
                                                        const isFilled = hit.rating >= index + 1;
                                                        return h('svg', {
                                                            key: index,
                                                            width: 16,
                                                            height: 16,
                                                            viewBox: '0 0 24 24',
                                                            fill: isFilled ? 'currentColor' : 'none',
                                                            stroke: 'currentColor',
                                                            strokeWidth: 3,
                                                            strokeLinecap: 'round',
                                                            strokeLinejoin: 'round'
                                                        },
                                                            h('polygon', { points: '12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2' })
                                                        );
                                                    })
                                                )
                                            ),
                                            h('div', { className: 'aa-ItemContentDescription', style: { color: '#000' } },
                                                h('strong', null, `$${hit.reg_sell_price.toLocaleString()}`)
                                            )
                                        )
                                    ),
                                    // h('div', { className: 'aa-ItemActions' },
                                    //     h('button', {
                                    //         className: 'aa-ItemActionButton aa-DesktopOnly aa-ActiveOnly',
                                    //         type: 'button',
                                    //         title: 'Select',
                                    //         style: { pointerEvents: 'none' }
                                    //     },
                                    //         h('svg', { viewBox: '0 0 24 24', width: 20, height: 20, fill: 'currentColor' },
                                    //             h('path', { d: 'M18.984 6.984h2.016v6h-15.188l3.609 3.609-1.406 1.406-6-6 6-6 1.406 1.406-3.609 3.609h13.172v-4.031z' })
                                    //         )
                                    //     ),
                                    // )
                                ),
                            );
                            // return h('a', { href: hit.url, className: 'aa-ItemLink' },
                            //     h('div', { className: 'aa-ItemContent' },
                            //         h('div', { className: 'aa-ItemIcon aa-ItemIcon--picture aa-ItemIcon--alignTop' },
                            //             h('img', { src: hit.image, alt: hit.name, width: 40, height: 40 })
                            //         ),
                            //         h('div', { className: 'aa-ItemContentBody' },
                            //             h('div', { className: 'aa-ItemContentTitle' },
                            //                 h(components.Snippet, { hit, attribute: 'title' })
                            //             ),
                            //             h('div', { className: 'aa-ItemContentDescription' },
                            //                 'From ',
                            //                 // h('strong', null, hit.brand),
                            //                 h('strong', null, "slick Pattern"),
                            //                 ' in ',
                            //                 h('strong', null, hit.Categories)
                            //             ),
                            //             hit.rating > 0 && h('div', { className: 'aa-ItemContentDescription' },
                            //                 h('div', { style: { display: 'flex', gap: '1', color: '#ffc107' } },
                            //                     Array.from({ length: 5 }, (_, index) => {
                            //                         const isFilled = hit.rating >= index + 1;
                            //                         return h('svg', {
                            //                             key: index,
                            //                             width: 16,
                            //                             height: 16,
                            //                             viewBox: '0 0 24 24',
                            //                             fill: isFilled ? 'currentColor' : 'none',
                            //                             stroke: 'currentColor',
                            //                             strokeWidth: 3,
                            //                             strokeLinecap: 'round',
                            //                             strokeLinejoin: 'round'
                            //                         },
                            //                             h('polygon', { points: '12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2' })
                            //                         );
                            //                     })
                            //                 )
                            //             ),
                            //             h('div', { className: 'aa-ItemContentDescription', style: { color: '#000' } },
                            //                 h('strong', null, `$${hit.reg_sell_price.toLocaleString()}`)
                            //             )
                            //         )
                            //     ),
                            //     h('div', { className: 'aa-ItemActions' },
                            //         h('button', {
                            //             className: 'aa-ItemActionButton aa-DesktopOnly aa-ActiveOnly',
                            //             type: 'button',
                            //             title: 'Select',
                            //             style: { pointerEvents: 'none' }
                            //         },
                            //             h('svg', { viewBox: '0 0 24 24', width: 20, height: 20, fill: 'currentColor' },
                            //                 h('path', { d: 'M18.984 6.984h2.016v6h-15.188l3.609 3.609-1.406 1.406-6-6 6-6 1.406 1.406-3.609 3.609h13.172v-4.031z' })
                            //             )
                            //         ),
                            //     )
                            // );

                        },
                        noResults() {
                            return 'No products for this query.';
                        },
                    },
                },
            ];
        },
    });

})
