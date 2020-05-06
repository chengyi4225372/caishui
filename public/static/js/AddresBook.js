
// Provide a default path to dwr.engine
if (dwr == null) var dwr = {};
if (dwr.engine == null) dwr.engine = {};
if (DWREngine == null) var DWREngine = dwr.engine;

if (AddresBook == null) var AddresBook = {};
AddresBook._path = '/finance_hzs_hbs/dwr';
AddresBook.yyfpsave = function(p0, p1, p2, p3, p4, p5, p6, callback) {
  dwr.engine._execute(AddresBook._path, 'AddresBook', 'yyfpsave', p0, p1, p2, p3, p4, p5, p6, false, callback);
}
AddresBook.check_kmdm = function(p0, p1, callback) {
  dwr.engine._execute(AddresBook._path, 'AddresBook', 'check_kmdm', p0, p1, callback);
}
AddresBook.gethasnoread = function(callback) {
  dwr.engine._execute(AddresBook._path, 'AddresBook', 'gethasnoread', false, callback);
}
AddresBook.check_kmdm_ynyt = function(p0, p1, p2, callback) {
  dwr.engine._execute(AddresBook._path, 'AddresBook', 'check_kmdm_ynyt', p0, p1, p2, callback);
}
