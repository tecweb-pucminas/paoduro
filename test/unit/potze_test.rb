require 'test_helper'

class PotzeTest < ActiveSupport::TestCase

   test "cupom 500123456-5" do
     assert_equal 5, Potze.create(:cupom => "500123456-5").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom 000000000-0" do
     assert_equal 0, Potze.create(:cupom => "000000000-0").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom 111111111-1" do
     assert_equal 1, Potze.create(:cupom => "111111111-1").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom 999999999-9" do
     assert_equal 9, Potze.create(:cupom => "999999999-9").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom 500123456-8" do
     assert_equal 8, Potze.create(:cupom => "500123456-5").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom 300123456-3" do
     assert_equal 3, Potze.create(:cupom => "300123456-3").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom ASBWJNDI-3" do
     assert_equal 3, Potze.create(:cupom => "ASBWJNDI-3").validate_digit , 'Verificando se o digito é valido'
   end
   
   test "cupom " do
     assert_equal '', Potze.create(:cupom => "").validate_digit , 'Verificando se o digito é valido'
   end
end
