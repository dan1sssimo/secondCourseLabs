using Lab3.Properties;
using SetLibrary;
using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

enum DistributionsEnum
{
    orderedDistribution,
    orderedDistributionRep,
    unorderedDistribution,
    unorderedDistributionRep,
    permutation,
    permutationRep
}

namespace Lab3
{
    public partial class Form1 : Form
    {
        private DistributionsEnum _selectedAction = DistributionsEnum.orderedDistribution;
        private Point labelEqualStartPos;
        private Point textboxResultStartPos;
        private Size textBoxNStartSize;

        public Form1()
        {
            InitializeComponent();

            labelEqualStartPos = labelEquals.Location;
            textboxResultStartPos = textBoxResult.Location;
            textBoxNStartSize = textBoxM.Size;
        }

        private void FormLab3_Load(object sender, EventArgs e)
        {
            textBoxM.LostFocus += OnLostFocus;
            textBoxM.GotFocus += OnGotFocus;
            textBoxN.LostFocus += OnLostFocus;
            textBoxN.GotFocus += OnGotFocus;
            textBoxM.Text = "3";
            textBoxN.Text = "4";



            var actions = new string[] {DistributionsEnum.orderedDistribution.ToString(), DistributionsEnum.orderedDistributionRep.ToString(),
                DistributionsEnum.unorderedDistribution.ToString(), DistributionsEnum.unorderedDistributionRep.ToString(), 
                DistributionsEnum.permutation.ToString(), DistributionsEnum.permutationRep.ToString() };

            comboBoxAction.Items.AddRange(actions);
            comboBoxAction.SelectedIndex = 0;
        }

        private void FormLab3_FormClosed(object sender, FormClosedEventArgs e)
        {
            Application.Exit();
        }

        private void OnLostFocus(object sender, EventArgs e)
        {
            var textBox = sender as TextBox;
            if (string.IsNullOrEmpty(textBox.Text))
                textBox.Text = GetPlaceholder(textBox.Name);
        }

        private void OnGotFocus(object sender, EventArgs e)
        {
            var textBox = sender as TextBox;
            if(textBox.Text == GetPlaceholder(textBox.Name))
                textBox.Text = "";
        }

        private string GetPlaceholder(string elemName) 
        {
            switch (elemName)
            {
                case nameof(textBoxM): return "m";
                case nameof(textBoxN): return "n";
                default: return "";
            }
        }

        private void comboBoxAction_SelectedIndexChanged(object sender, EventArgs e)
        {
            var comboBox = sender as ComboBox;
            _selectedAction = (DistributionsEnum)comboBox.SelectedIndex;
            ChangePicture(_selectedAction);
            AdjustUI(_selectedAction);
            Culculate();
        }

        private void ChangePicture(DistributionsEnum action)
        {
            pictureBoxAction.Image = action switch
            {
                DistributionsEnum.orderedDistribution => Resources.orderedDistribution,
                DistributionsEnum.orderedDistributionRep => Resources.orderedDistributionRep,
                DistributionsEnum.unorderedDistribution => Resources.unorderedDistribution,
                DistributionsEnum.unorderedDistributionRep => Resources.unorderedDistributionRep,
                DistributionsEnum.permutation => Resources.permutation,
                DistributionsEnum.permutationRep => Resources.permutation,
                _ => Resources.orderedDistribution,
            };
        }

        private void AdjustUI(DistributionsEnum action)
        {
            if(action != DistributionsEnum.permutationRep)
            {
                labelEquals.Location = labelEqualStartPos;
                textBoxResult.Location = textboxResultStartPos;
                textBoxN.Size = textBoxNStartSize;
                textBoxM.Visible = true;
                textBoxN.TextAlign = HorizontalAlignment.Center;
                textBoxM.TextAlign = HorizontalAlignment.Center;
            }


            if(action == DistributionsEnum.permutation)
            {
                textBoxM.Visible = false;
            }
            else if(action == DistributionsEnum.permutationRep)
            {
                textBoxM.Visible = false;
                textBoxN.Size = new Size(textBoxN.Size.Width + 100, textBoxN.Size.Height);
                labelEquals.Location = new Point(labelEquals.Location.X + 100, labelEquals.Location.Y);
                textBoxResult.Location = new Point(textBoxResult.Location.X + 100, textBoxResult.Location.Y);
                textBoxN.TextAlign = HorizontalAlignment.Left;
                textBoxM.TextAlign = HorizontalAlignment.Left;
            }
        }

        private void Culculate()
        {
            try
            {
                if (_selectedAction != DistributionsEnum.permutation &&
                    _selectedAction != DistributionsEnum.permutationRep) 
                {
                    float.TryParse(textBoxM.Text, out float m);
                    float.TryParse(textBoxN.Text, out float n);

                    if (m > n || m < 0 || n < 0)
                        throw new Exception();

                    switch (_selectedAction)
                    {
                        case DistributionsEnum.orderedDistribution:
                            textBoxResult.Text = Distributions.OrderedDistribution(m, n).ToString();
                            break;
                        case DistributionsEnum.orderedDistributionRep:
                            textBoxResult.Text = Distributions.OrderedDistributionRep(m, n).ToString();
                            break;
                        case DistributionsEnum.unorderedDistribution:
                            textBoxResult.Text = Distributions.UnorderedDistribution(m, n).ToString();
                            break;
                        case DistributionsEnum.unorderedDistributionRep:
                            textBoxResult.Text = Distributions.UnorderedDistributionRep(m, n).ToString();
                            break;
                    }
                }
                else
                {
                    switch (_selectedAction)
                    {
                        case DistributionsEnum.permutation:
                            if (!float.TryParse(textBoxN.Text, out float n))
                                throw new Exception();
                            textBoxResult.Text = Distributions.Permutation(n).ToString();
                            break;
                        case DistributionsEnum.permutationRep:
                            var numStringList = textBoxN.Text.Split(',');
                            var numList = new List<float>();

                            foreach (var numSt in numStringList)
                                numList.Add(float.Parse(numSt));

                            textBoxResult.Text = Distributions.PermutationRep(numList).ToString();
                            break;  
                    }
                }
            }
            catch
            {
                textBoxResult.Text = "ERROR";
            }
        }

        private void textBoxM_TextChanged(object sender, EventArgs e)
        {
            Culculate();
        }
    }
}