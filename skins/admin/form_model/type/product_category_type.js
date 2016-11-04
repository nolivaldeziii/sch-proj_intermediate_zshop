/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function () {

  Vue.directive('xliteProductCategory', {
    params: ['searchingLbl', 'noResultsLbl', 'enterTermLbl'],
    twoWay: true,
    bind: function () {
      var self = this;
      var $el = $(this.el);
      var model = this.expression;
      var term = '';

      $el
        .select2(
          {
            debug: true,
            language: {
              noResults: function () {
                return term.length ? self.params.noResultsLbl : self.params.enterTermLbl;
              },
              searching: function () {
                return self.params.searchingLbl;
              }
            },
            ajax: {
              cacheDataSource: [],
              url: URLHandler.buildURL({target: 'categories', action: 'selectorData'}),
              dataType: 'json',
              delay: 250,
              data: function (params) {
                term = params.term || '';
                return {term: params.term, page: params.page ? params.page - 1 : 0}
              },
              transport: function (params, success, failure) {
                var self = this;
                var key = JSON.stringify(params.data);

                if (self.cacheDataSource[key]) {
                  success(self.cacheDataSource[key]);
                } else {

                  var $request = $.ajax(params);

                  $request.then(function (data) {
                    self.cacheDataSource[key] = data;
                    success.apply(this, arguments);
                  });
                  $request.fail(failure);

                  return $request;
                }
              },
              cache: true
            },
            escapeMarkup: function (markup) { return markup; },
            templateResult: function (repo) {
              if (repo.loading) return repo.text;

              return repo.text.replace(new RegExp('('+repo.term+')([^/]*)$', 'i'), '<em>$1</em>$2');
            }
          }
        )
        .on('select2:select', _.bind(function (e) {
          var $el = $(this.el);
          this.vm.$set(model, $el.val() || []);
        }, this))
        .on('select2:unselect', _.bind(function (e) {
          var $el = $(this.el);
          this.vm.$set(model, $el.val() || []);
        }, this));
    }
  });

})();
