class AlterFieldTypeToProduto < ActiveRecord::Migration
    def self.up
    change_table :produtos do |t|
      t.change :preco, :float
    end
  end

  def self.down
    change_table :produtos do |t|
      t.change :preco, :decimal
    end
  end
end
