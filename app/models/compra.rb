class Compra < ActiveRecord::Base
  belongs_to :produto
  belongs_to :user
end
